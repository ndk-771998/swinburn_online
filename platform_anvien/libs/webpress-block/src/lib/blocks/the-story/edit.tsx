import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';

const TheStoryItemTeamplate = [['webpress/the-story-item', {}]];
const ALLOWED_BLOCKS = ['webpress/the-story-item'];

const TheStoryHeadingTeamplate = [
  ['core/heading', { placeholder: 'The Story Title' }],
  ['core/paragraph', { placeholder: 'The Story Summary' }],
];

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {

  return (
    <div {...useBlockProps()}>
      <div className="col-12 story">
      <InnerBlocks 
        template={TheStoryItemTeamplate}
        allowedBlocks={ALLOWED_BLOCKS}
      />
      </div>
    </div>
  );
}
