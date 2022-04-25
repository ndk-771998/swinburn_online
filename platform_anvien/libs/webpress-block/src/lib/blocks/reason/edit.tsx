import { Input } from 'antd';
import './editor.scss';

import {
    RichText,
    InspectorControls,
    useBlockProps,
    InnerBlocks
} from '@wordpress/block-editor';

import {
    CheckboxControl,
    RadioControl,
    TextControl,
    ToggleControl,
    SelectControl,
    PanelBody,
} from '@wordpress/components';

const { TextArea } = Input;

const ReasonItemTeamplate = [['webpress/reason-item', {}]];
const ALLOWED_BLOCKS = ['webpress/reason-item'];

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
    
    return (
        <div className="video" {...useBlockProps()}>
            <div className="col-12">
                <InnerBlocks
                    template={ReasonItemTeamplate}
                    allowedBlocks={ALLOWED_BLOCKS}
                />
            </div>
        </div>
    );
}