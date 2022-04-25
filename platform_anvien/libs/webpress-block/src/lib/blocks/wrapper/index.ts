import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export const Wrapper: Block = {
  name: 'webpress/wrapper',
  settings: {
    apiVersion: 2,
    title: 'Wrapper',
    slug: 'wrapper',
    category: "widgets",
    attributes: {
      content: {
        type: 'string',
        default: ''
      },
    },
    edit: Edit,
    save,
  }
}
