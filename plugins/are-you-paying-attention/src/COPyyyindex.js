
// Wordpress itself is going to add somthing called WP to the browsers global scope 
// 1. Register a new block type
wp.blocks.registerBlockType("ourplugin/are-you-paying-attention", {
  title: "Are You Paying Attention?",
  icon: "smiley",
  category: "common",
  attributes: {
    skyColor: { type: "string" },
    grassColor: { type: "string" }
  },
  edit: function (props) {
    /**
     * OLD code
   wp.blocks.registerBlockType("ourplugin/are-you-paying-attention", {
  title: "Are You Paying Attention?",
  icon: "smiley",
  category: "common",
  edit: function () {
    
    createElement(
  'h2', // Element type (heading)
  { className: 'my-custom-heading' }, // Attributes (class)
      'This is my custom heading' // Content (text)
    createElement(
  'input',
  {
    type: 'text',
    placeholder: 'Enter a title',
    value: props.attributes.title,
    onChange: (event) => props.setAttributes({ title: event.target.value }),
  }
);
);
    
    createElement
    return wp.element.createElement("h3", null, "Hello, this is from the admin editor screen.")
    },
     createElement
    return wp.element.createElement("div", null, [
      wp.element.createElement("h1", null, "Hello, this is H1"),
      wp.element.createElement("h4", {style:{color: 'skyblue'}}, "Hello, this is H4.")
    ])
    return (
         <div>
      <p>lorem.......</p>
      <h3>This is from JSX</h3>
    </div>
    )
     */
    function updateSkyColor(event) {
      props.setAttributes({skyColor: event.target.value})
    }
    function updateGrassColor(event) {
      props.setAttributes({grassColor: event.target.value})
    }
    return (
      <div>
        <input type="text" value={props.attributes.skyColor} placeholder="sky color" onChange="{updateSkyColor}"/>
        <input type="text" value={props.attributes.grassColor} placeholder="grass color"  onChange="{updateGrassColor}"/>
    </div>
    )
  },
  save: function (props) {
    // return wp.element.createElement("h1", null, "This is the frontend.")
    return (
      <>
        <p>Today the sky is {props.attributes.skyColor}  and the and the grass is {props.attributes.grassColor}  </p>
      </>
    )
  }
})
