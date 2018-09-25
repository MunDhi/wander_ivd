# Khemistry Base Project for Static Websites (No CMS)

## Khemistry SASS explanation & guidelines

Whilst this styleguide serves as a handy guide, the CSS & JS are also intended to be used at the beginning of your project. This is to give you a big head-start and help ensure consistency.

To get started with gulp, assuming you have node & npm, follow these steps in terminal/command line:

```
npm install
gulp
```

## Khemistry's SASS structure quickly explained:

vendor/*
Any bits taken from the internet.

partials/_variables
Color, font, max-width variables.

partials/_typography
All font, heading, paragraph, etc bits.

partials/_layout
Header, footer, sidebar, etc bits.

partials/_components
Globally reusable bits: includes buttons, accordions, blocks, and more.

partials/_forms
Global styles for inputs etc

partials/_shame
Any bad css to be cleaned up in the future.

## Use media queries like this:

Think mobile first: when using media queries, use ">size" wherever possible instead of "<size".

The whole site uses @include-media (https://include-media.com/) with set sizes, check out "vendor/_include-media" to see the set sizes. Don't deviate from the variables set here. Change the variables (therefore changing all breakpoints across the website) if you need to. If you "have" to deviate, put it in the shame file until it can be cleaned up properly.

## Some tldr guidelines that Khemistry SASS files follow. Adapted from http://cssguidelin.es/

1. Put new CSS in the appropriate file as above & add it to the table of contents using the same format. If you can't do that/or are unsure, please put it in the shame file until it can be cleaned up properly.

2. Don't use !important. If you have to, please put it in the "shame" file until
it can be cleaned up properly. This is to ensure specificity stays low & therefore code stays maintainable.

3. Don't indent more than 3 times (4 times if it's inside a media query). This is to ensure specificity stays low & therefore code stays maintainable.

4. Order declarations as follows:

```
[selector] {
  [mixins]
  [positioning stuff (position,top,right]
  [flexbox stuff]
  [box model stuff] (margin,height,width,etc)
  [color stuff]
  [text/typography stuff]
  [anything else]
}
```

e.g.

```
[selector] {
  @include container; [mixins]
  position: static; [positioning stuff]
  display: flex; [flexbox stuff]
  margin: 0; [box model stuff]
  color: $purple; [color stuff]
  text-transform: uppercase [text stuff]
  opacity: 0.5; [anything else]
}
```

5. Space is your friend, use it like so:

```
[selector] {
  [property]: [value];

  [selector] {
    [property]: [value];
  }

}
```

6. Leave 5 spaces between a comment title and the next section.
