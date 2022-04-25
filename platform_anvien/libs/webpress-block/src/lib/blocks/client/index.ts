import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export { ClientItem } from './client-item';

export const Client: Block = {
  name: 'webpress/client',
  settings: {
    apiVersion: 2,
    title: 'Client',
    slug: 'client',
    category: "widgets",
    attributes: {
      title: {
        type: 'string',
        default: ''
      },
      description: {
        type: 'string',
        default: ''
      },
      bg_color: { 
        type: 'string', 
        default: '#323232' 
      },
      style: {
        type: 'string',
        default: 'style-1'
      }
    },
    edit: Edit,
    save,
  }
}
