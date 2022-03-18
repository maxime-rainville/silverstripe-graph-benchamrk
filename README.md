# Silverstripe CMS GraphQL v4 schema

The purpose of this module is create big ass GraphQL schemas to benchmark GraphQL v4 performance.

## Installation
```bash
composer require maxime-rainville/silverstripe-graphql-benchmark
```

## Usage

The schemas and related DataObject are created by running this command.
```bash
# The fake schemas are created against this repo. Make sure you remove any pre-existing schema first
rm vendor/maxime-rainville/silverstripe-graphql-benchmark/src/Models/*.php
rm vendor/maxime-rainville/silverstripe-graphql-benchmark/_config/graphql.yml
rm vendor/maxime-rainville/silverstripe-graphql-benchmark/_graphql/* -R

sake dev/tasks/MaximeRainville-SilverStripeGraphQLBenchmark-Tasks-SchemaCreatorTask "" flush=all
```

Look at the config option on [`SchemaCreatorTask`](src/Tasks/SchemaCreatorTask.php) for the various options.

If you want to be able to deploy this somewhere, you'll have to run the task and commit your changes to a fork.

## What about data
The dummy data object will try to generate some random data and random relationships on dev/build.

By default, we'll generate 5 instances of each DataObject class and randomly link them up in relationships.

## What schema will be generated out of the box?
By default, the module doesn't have any schemas or DataObjects. You have to run the task to get something.

By default, the task will generate the following schemas:
- tiny: 5 DataObjects
- small: 10 DataObjects
- medium: 40 DataObjects
- big: 100 DataObjects
- verybig: 250 DataObjects
- gigantic: 500 DataObjects

The generated DataObject will have a mixed of unversioned DataObjects, versioned DataObject and versioned-unstaged DataObjects. The ratio is 45-45-10. 

## What other branches can I install?
- `generic` provides a generic set up that should be suitable for most cases.
- `small-only` only ships a tiny and small schema. Use this branch if you don't want to be stuck building the full 500 DataObject gigantic schema
- `versioned-all` will add the Versioned extension to all the DataObjects
- `versioned-none` will not apply the Versioned extension to any DataObjects
