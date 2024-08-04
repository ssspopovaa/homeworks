<?php

/**
 * Not consistent with the interface segregation principle
 */

interface Doctor
{
    public function getRecipe(): string;

    public function diagnostic(): void;

    public function surgery();

    public function toothExtraction();

    public function bloodSampling();
}

class Dentist implements Doctor
{
    public function getRecipe(): string
    {

    }

    public function diagnostic(): void
    {

    }

    public function surgery()
    {

    }

    public function toothExtraction()
    {

    }

    public function bloodSampling()
    {
        // unnecessary method
    }
}

class Diagnostician implements Doctor
{
    public function getRecipe(): string
    {

    }

    public function diagnostic(): void
    {

    }

    public function surgery()
    {
        // unnecessary method
    }

    public function toothExtraction()
    {
        // unnecessary method
    }

    public function bloodSampling()
    {

    }
}

class Surgeon implements Doctor
{
    public function getRecipe(): string
    {
        // unnecessary method
    }

    public function diagnostic(): void
    {
        // unnecessary method
    }

    public function surgery()
    {

    }

    public function toothExtraction()
    {
        // unnecessary method
    }

    public function bloodSampling()
    {
        // unnecessary method
    }
}

/** ------------------------------------------------------------------------------------- */

/**
 * Consistent with the interface segregation principle
 */

interface DentInterface
{
    public function getRecipe(): string;

    public function diagnostic(): void;

    public function toothExtraction();
}

interface SurgeryInterface
{
    public function surgery();
}

interface DiagnosticInterface
{
    public function getRecipe(): string;

    public function diagnostic(): void;

    public function bloodSampling();
}

class Dentist2 implements DentInterface
{
    public function getRecipe(): string
    {

    }

    public function diagnostic(): void
    {

    }

    public function toothExtraction()
    {

    }
}

class Diagnostician2 implements DiagnosticInterface
{
    public function getRecipe(): string
    {

    }

    public function diagnostic(): void
    {

    }

    public function bloodSampling()
    {

    }
}

class Surgeon2 implements SurgeryInterface
{
    public function surgery()
    {

    }
}
