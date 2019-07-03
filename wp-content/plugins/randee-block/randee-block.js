/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

( function( blocks, editor, element ) {
    var el = element.createElement;
    var RichText = editor.RichText;
    var AlignmentToolbar = editor.AlignmentToolbar;
    var BlockControls = editor.BlockControls;
    var InspectorControls = editor.InspectorControls;

    // var {
    //   RichText,
    //   AlignmentToolbar,
    //   BlockControls,
    //   BlockAlignmentToolbar,
    //   InspectorControls,
    // } = wp.editor;
    //
    // var {
    //   Toolbar,
    //   Button,
    //   Tooltip,
    //   PanelBody,
    //   PanelRow,
    //   FormToggle,
    // } = wp.components;


    blocks.registerBlockType( 'randee-block/randee-block', {
        title: 'Randee',
        icon: 'universal-access-alt',
        category: 'layout',
        attributes: {
          content: {
              type: 'array',
              source: 'children',
              selector: 'p',
          },
          alignment: {
            type: 'string',
            default: 'none',
          },
        },

        edit: function(props) {
          var content = props.attributes.content;
          var alignment = props.attributes.alignment;

          function onChangeContent( newContent ){
            props.setAttributes( { content: newContent } );
          }

          function onChangeAlignment( newAlignment ){
            props.setAttributes( { alignment: newAlignment === undefinded ? 'none' : newAlignment } );
          }

          return [
            el(
              BlockControls,
              { key: 'controls' },
              el(
                AlignmentToolbar,
                {
                  value: alignment,
                  onChange: onChangeAlignment,
                }
              )
            ),
            el(
              RichText,
              {
                key: 'richtext',
                tagName: 'p',
                style: { textAlign: alignment },
                className: props.className,
                onChange: onChangeContent,
                value: content,
              }
            ),
            el(
              InspectorControls,
              {
                key: '',
                tagName: 'p',
                style: { textAlign: alignment },
                className: props.className,
                onChange: onChangeContent,
                value: content,
              }
            ),
          ];
        },
        save: function(props) {
          return el( RichText.Content, {
            tagName: 'p',
            className: 'randee-block-' + props.attributes.alignment,
            value: props.attributes.content,
          } );
        },
    } );
}(
    window.wp.blocks,
    window.wp.editor,
    window.wp.element
) );
