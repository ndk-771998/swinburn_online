import { useBlockProps } from '@wordpress/block-editor';

import { Block } from '../../../block.model';
import { Edit } from './edit';

export const WpCoreImage: Block = {
  name: 'wpcore/image',
  settings: {
    apiVersion: 2,
    title: 'Image',
    slug: 'wpcore-image',
    category: "widgets",
    attributes: {
      url: {
        type: 'string',
        default: '/assets/images/img-placeholder.png'
      },
      alt: {
        type: 'string',
        default: ''
      },
      containerWidth: {
        type: 'string',
        default: '100%'
      },
      width: {
        type: 'string',
        default: '100%'
      },
      align: {
        type: 'string',
        default: 'center'
      },
    },
    supports: {
      align: true
    },
    edit: Edit,
    save: ({ attributes }: { attributes: Record<string, string> }) => {
      const { align, url, alt, containerWidth, width } = attributes;
      const blockProps = useBlockProps.save();
      return (
        <div {...blockProps}>
          <div className={`wp-core-image align${align}`} style={{ width: containerWidth }} >
            <img className="wp-core-image__img" style={{ width: width }} src={url} alt={alt} />
          </div>
        </div>
      )
    },
  }
}
