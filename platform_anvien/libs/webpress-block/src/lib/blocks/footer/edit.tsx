import './editor.scss';

import {
  Input,
  Select,
} from 'antd';

import {
  InnerBlocks,
  useBlockProps,
} from '@wordpress/block-editor';

const FooterItemTeamplate = [
  ['webpress/footer-item', {}],
];
const ALLOWED_BLOCKS = ['webpress/footer-item'];

const { TextArea } = Input;
const { Option } = Select;

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  const onChangeAttribute = (attribute: string, value: string | number) => {
    setAttributes({ [attribute]: value });
  }
  return (
    <div {...useBlockProps()}>
      <div className="row">
        <div className="footer__box">

            <InnerBlocks
              template={FooterItemTeamplate}
              allowedBlocks={ALLOWED_BLOCKS}
            />

        </div>
        <div className="col-12 footer__copyright">
          <Input placeholder="copyright" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('copyright', e.target.value)} value={attributes.copyright} />
        </div>
      </div>
    </div>

  );
}
