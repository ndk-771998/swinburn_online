import './editor.scss';

import {
  Media,
  MediaSelector,
} from '@vicoders/editor';
import {
  BlockControls,
  InspectorControls,
  useBlockProps,
} from '@wordpress/block-editor';
import {
  IconButton,
  PanelBody,
  TextControl,
  Toolbar,
} from '@wordpress/components';
import { useState } from '@wordpress/element';

export function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  const {
    url,
    alt,
    align,
    containerWidth,
    width,
  } = attributes;
  const [isMediaModalActive, setIsMediaModalActive] = useState(false);

  const showMediaModal = () => {
    setIsMediaModalActive(!isMediaModalActive);
  }

  const onSelect = (media: Media | undefined) => {
    if (media) {
      setAttributes({ url: media.original_url, alt: media.alt_img });
    }
  }

  const onChangeAttribute = (attribute: string, value: string | number) => {
    setAttributes({ [attribute]: value });
  }


  return (

    <div {...useBlockProps()}>
      <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{width:1, height:1}} />
      <InspectorControls>
        <PanelBody title="Settings">
          <TextControl
            label="Container width"
            help="Ex: 100%, 500px"
            value={containerWidth}
            onChange={(value: string) => onChangeAttribute('containerWidth', value)}
          />
          <TextControl
            label="Width"
            help="Ex: 100%, 500px"
            value={width}
            onChange={(value: string) => onChangeAttribute('width', value)}
          />
        </PanelBody>
      </InspectorControls>
      <BlockControls>
        <Toolbar>
          <IconButton
            label="Change image"
            icon={
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g data-name="Layer 2"><g data-name="image"><rect width="24" height="24" opacity="0" /><path d="M18 3H6a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3zM6 5h12a1 1 0 0 1 1 1v8.36l-3.2-2.73a2.77 2.77 0 0 0-3.52 0L5 17.7V6a1 1 0 0 1 1-1zm12 14H6.56l7-5.84a.78.78 0 0 1 .93 0L19 17v1a1 1 0 0 1-1 1z" /><circle cx="8" cy="8.5" r="1.5" /></g></g></svg>
            }
            onClick={showMediaModal}
          />
        </Toolbar>
      </BlockControls>
      <div className={`wp-core-image align${align}`} style={{ width: containerWidth }} >
        <img className="wp-core-image__img" style={{ width: width }} src={url} alt={alt} />
      </div>
    </div >
  )
}
