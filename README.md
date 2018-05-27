# Nano Unit Helper

A simple helper for converting units of Nano cryptocurrency

## Install

```
composer require binarycabin/nano-units
```

## Usage

```
\NanoUnits::convert($unitFrom,$unitTo,$value)
```

for example

```
\NanoUnits::convert('Mnano','knano',99)
// Returns "99000"
```

## Laravel

The package makes a NanoUnits facade, so you can simply do

```
\NanoUnits::convert($unitFrom,$unitTo,$value)
```

## Units Available

- Gnano
- ticker
- Mnano
- knano
- nano
- mnano
- unano
- raw

Note, the NANO ticker value is represented by "Mnano", which can sometimes cause confusion with the "nano" unit. You can use the "ticker" unit as an alias for "Mnano" to help make it easier for debugging
