import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export { FooterItem } from './footer-item';

export const Footer: Block = {
  name: 'webpress/footer',
  settings: {
    apiVersion: 2,
    title: 'Footer',
    slug: 'footer',
    category: "widgets",
    attributes: {
      copyright: {
        type: 'string',
        default: ''
      },
    },
    edit: Edit,
    save,
  }
}
