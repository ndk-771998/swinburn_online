import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export { TheTeamItem } from './the-team-item';

export const TheTeam: Block = {
  name: 'webpress/the-team',
  settings: {
    apiVersion: 2,
    title: 'The Team',
    slug: 'the-team',
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
      alignment: {
        type: 'string',
        default: 'none',
      },
      bgColor: { 
        type: 'string', 
        default: '' 
      },    
      bgImage: { 
        type: 'string', 
        default: 'assets/images/image.jpg' 
      }, 
      selectBackground: { 
        type: 'string', 
        default: 'color' 
      },
      titleColor: { 
        type: 'string', 
        default: '' 
      },
      descriptionColor: { 
        type: 'string', 
        default: '' 
      },   
      style: {
			  type: 'string',
        default: 'style-1' 
		  },
      fontFamily: {
			  type: 'string',
        default: ''   
		  },
      titleFontSize:{
			  type: 'string',
        default: '' 
		  },
      descriptionFontSize:{
			  type: 'string',
        default: '' 
		  },
    },
    
    edit: Edit,
    save,
  }
}
