import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export { ReasonItem } from './reason-item';

export const Reason: Block = {
  name: 'webpress/reason',
  settings: {
    apiVersion: 2,
    title: 'Reason',
    slug: 'reason',
    category: "widgets",
    attributes: {
      
    },
    edit: Edit,
    save,
  }
}
