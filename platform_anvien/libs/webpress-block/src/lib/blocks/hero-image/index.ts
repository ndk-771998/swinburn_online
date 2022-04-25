import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export const HeroImage: Block = {
  name: 'webpress/hero-image',
  settings: {
    apiVersion: 2,
    title: 'Hero Image',
    slug: 'hero-image',
    category: "widgets",
    attributes: {
      alignment: {
        type: 'string',
        default: 'none'
      },
      message: {
        type: 'string',
        default: ''
      },
      bg_color: { type: 'string', default: '#000000' },
      text_color: { type: 'string', default: '#ffffff' },
    },
    edit: Edit,
    save,
  }
}
