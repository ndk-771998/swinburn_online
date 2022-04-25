import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';
export { WebpressGalleryItem } from './webpress-gallery-item';
export const WebpressGallery: Block = {
  name: 'webpress/webpress-gallery',
  settings: {
    apiVersion: 2,
    title: 'Webpress Gallery',
    slug: 'webpress-gallery',
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
      style: {
			  type: 'string',
        default: 'style-1' 
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
