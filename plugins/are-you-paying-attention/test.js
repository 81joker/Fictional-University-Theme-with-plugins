
// Wordpress itself is going to add somthing called WP to the browsers global scope 
// 1. Register a new block type
wp.blocks.registerBlockType("ourplugin/are-you-paying-attention", {
  title: "Are You Paying Attention?",
  icon: "smiley",
  category: "common",
  edit: function () {
    // 
//     createElement(
//   'h2', // Element type (heading)
//   { className: 'my-custom-heading' }, // Attributes (class)
    //   'This is my custom heading' // Content (text)
//     createElement(
//   'input',
//   {
//     type: 'text',
//     placeholder: 'Enter a title',
//     value: props.attributes.title,
//     onChange: (event) => props.setAttributes({ title: event.target.value }),
//   }
// );
// );
    // 
    createElement
    return wp.element.createElement("h3", null, "Hello, this is from the admin editor screen.")
  },
  save: function () {
    return wp.element.createElement("h1", null, "This is the frontend.")
  }
})
