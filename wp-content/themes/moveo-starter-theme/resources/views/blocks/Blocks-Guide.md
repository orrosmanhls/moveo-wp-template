# How To Create A New Block?

## Requirements

- [Advanced Custom Fields PRO](https://www.advancedcustomfields.com/pro/)
- [mwdelaney/sage-acf-gutenberg-blocks](https://github.com/MWDelaney/sage-acf-wp-blocks) installed via composer

## Steps

1. Create a new `.blade.php` template file under `/resources/views/blocks/`
2. Enter a comment block in the top of the file that looks like this (refer to [mwdelaney/sage-acf-gutenberg-blocks](https://github.com/MWDelaney/sage-acf-wp-blocks) for more information):

```
{{--
  Title: Block Name
  Description: Block Description
  Category: Block Category
  Icon: Block Icon (use dash icons)
  Keywords: Keywords to search for the block
--}}
```

- **NOTE :** each filed has to be on its own line. For example, this description block won't be registered:

```
{{-- Title: Block Name
    Description: Block Description
    Category: Block Category
    Icon: Block Icon (use dash icons)
    Keywords: Keywords to search for the block --}}
```

3. Build the template structure of the block
4. Create a new `.scss` file under `/resources/styles/blocks/` with the same name as the block (e.g., `example.blade.php` & `example.scss`) and add it to the `blocks/index.scc` file as well like this: `@use "./example.scss";`
5. If you used used any custom field, add theme through the WP Admin panel and make sure in the "Rules" select the "Block" field group and your block name
