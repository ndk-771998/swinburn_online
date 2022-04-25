import './editor.scss';

import {
  Input,
  Select,
} from 'antd';

import {
  InspectorControls,
  InnerBlocks,
  useBlockProps,
} from '@wordpress/block-editor';
import {
  PanelBody,
  SelectControl,
  TextControl,
} from '@wordpress/components';
import { Media, MediaSelector } from '@vicoders/editor';
import { useState } from '@wordpress/element';

const FooterItemTeamplate = [
  ['webpress/footer-top-item', {}],
];
const ALLOWED_BLOCKS = ['webpress/footer-top-item'];

const { TextArea } = Input;
const { Option } = Select;

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  const [isMediaModalActive, setIsMediaModalActive] = useState(false);

  const showMediaModal = () => {
    setIsMediaModalActive(!isMediaModalActive);
  }

  const onSelect = (media: Media | undefined) => {
    if (media) {
      setAttributes({ logo: media.original_url, alt: media.alt_img });
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
                label="Link"
                help="Link redirect to other page"
                value={attributes.logo_url}
                onChange={(value: string) => onChangeAttribute('logo_url', value)}
              />
            </PanelBody>
          </InspectorControls>
      <div className="row">
        <div className="col-6 footer__logo">
          <img src={attributes.logo} alt={attributes.alt} onClick={showMediaModal} />
          <Input placeholder="name" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('name', e.target.value)} value={attributes.name} />
        </div>
        <div className="col-6 footer__social">

            <InnerBlocks
              template={FooterItemTeamplate}
              allowedBlocks={ALLOWED_BLOCKS}
            />

        </div>
      </div>
    </div>

  );
}
