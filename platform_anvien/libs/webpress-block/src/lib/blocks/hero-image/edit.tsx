import './editor.scss';

import {
  AlignmentToolbar,
  BlockControls,
  ColorPalette,
  InspectorControls,
  useBlockProps,
} from '@wordpress/block-editor';

export default function Edit({ attributes, isSelected, setAttributes }) {
  const handleChange = (e) => {
    setAttributes({ message: e.target.value });
  }
  const onChangeAlignment = (newAlignment) => {
    setAttributes({
      alignment: newAlignment === undefined ? 'none' : newAlignment,
    });
  };

  const onChangeBGColor = (hexColor) => {
    setAttributes({ bg_color: hexColor });
  };

  const onChangeTextColor = (hexColor) => {
    setAttributes({ text_color: hexColor });
  };

  const style = {
    textAlign: attributes.alignment,
    backgroundColor: attributes.bg_color,
    color: attributes.text_color,
  };


  return (
    <div {...useBlockProps()}>
      {attributes.message && !isSelected ? (
        <div>
          <div style={style}>{attributes.message}</div>
        </div>
      ) : (
        <div>
          <BlockControls>
            <AlignmentToolbar
              value={attributes.alignment}
              onChange={onChangeAlignment}
            />
          </BlockControls>
          <InspectorControls key="setting">
            <div id="gutenpride-controls">
              <fieldset>
                <legend className="blocks-base-control__label">
                  Background color
                </legend>
                <ColorPalette
                  onChange={onChangeBGColor}
                />
              </fieldset>
              <fieldset>
                <legend className="blocks-base-control__label">
                  Text color
                </legend>
                <ColorPalette
                  onChange={onChangeTextColor}
                />
              </fieldset>
            </div>
          </InspectorControls>
          <textarea style={style} className="form-control" value={attributes.message} onChange={handleChange} />
        </div>
      )}
    </div>
  );
}
