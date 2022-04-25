import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';
export { FeedbackItem } from './feedback-item';
export const Feedback: Block = {
  name: 'webpress/feedback',
  settings: {
    apiVersion: 2,
    title: 'Feedback',
    slug: 'feedback',
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
		  },
      
    },
    edit: Edit,
    save,
  }
}
