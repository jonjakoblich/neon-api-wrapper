<?php

namespace TwoJays\NeonApiWrapper\Factories;

use Faker\Factory;
use InvalidArgumentException;
use ReflectionClass;
use ReflectionNamedType;
use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Contracts\DataObject;

/**
 * Helper class for testing.
 */
class DataGeneratorFactory
{
    private static $faker;

    private static function getFaker()
    {
        if (self::$faker === null) {
            self::$faker = Factory::create();
        }
        return self::$faker;
    }

    /**
     * Instantiates a DataObject object and populates it with
     * fake sample data, obeying the property types.
     * 
     * Best alternative to creating hundreds of static JSON
     * API response files for moking and testing.
     */
    public static function generate(string $className): DataObject
    {
        if (!class_exists($className)) {
            throw new InvalidArgumentException("Class $className does not exist.");
        }

        $reflectionClass = new ReflectionClass($className);
        $instance = $reflectionClass->newInstanceWithoutConstructor();

        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            $propertyType = $property->getType();

            if ($propertyType instanceof ReflectionNamedType) {
                
                $propertyTypeName = $propertyType->getName();
                
                if (class_exists($propertyTypeName)) {
                    // Recursively instantiate nested DTOs
                    $property->setValue($instance, self::generate($propertyTypeName));
                } else {

                    if($propertyTypeName == 'array') {
                        // Check for ArrayOf attribute on constructor parameters
                        $constructor = $reflectionClass->getConstructor();
                        if ($constructor) {
                            foreach ($constructor->getParameters() as $parameter) {
                                $attributes = $parameter->getAttributes(ArrayOf::class);
                                if (!empty($attributes) && $parameter->getName() === $property->getName()) {
                                    $arrayOf = $attributes[0]->newInstance();
                                    $property->setValue($instance, self::generateArrayOfSampleData($arrayOf->className));
                                }
                            }
                        }
                    } else {
                        $property->setValue($instance, self::generateSampleData($propertyTypeName));
                    }
                }
            }
        }

        return $instance;
    }

    private static function generateSampleData(string $type)
    {
        $faker = self::getFaker();
        return match ($type) {
            'string' => $faker->word(),
            'int', 'integer' => $faker->randomNumber(),
            'float', 'double' => $faker->randomFloat(2, 0, 1000),
            'bool', 'boolean' => $faker->boolean,
            'DateTime' => $faker->dateTime,
            default => null,
        };
    }

    private static function generateArrayOfSampleData(string $className, int $count = 3)
    {
        $array = [];
        for ($i = 0; $i < $count; $i++) {
            $array[] = self::generate($className);
        }
        return $array;
    }
}