import {
  EditorConfig,
  WebpressEditor,
} from '@vicoders/editor';
import {
  Client,
  ClientItem,
  Contact,
  Feedback,
  FeedbackItem,
  Footer,
  FooterItem,
  Header,
  Highlight,
  HighlightItem,
  Reason,
  Slider,
  Stepper,
  StepperItem,
  Testimonial,
  TheStory,
  TheTeam,
  TheTeamItem,
  WebpressGallery,
  WebpressGalleryItem,
  WpCoreImage,
  Wrapper,
  SliderItem,
  TheStoryItem,
  ReasonItem,
  Process,
  ProcessItem,
  FooterTop,
  FooterTopItem
} from '@webpress/blocks';

function App() {
  const onSave = (data: any) => {
    console.log({ data });
    console.log(data.content.join(""));
  };

  const blocks: any[] = [];
  const customBlocks = [Testimonial, TheStory, ReasonItem, Process, ProcessItem, TheStoryItem ,Reason, Header, Slider, TheTeamItem, Wrapper, TheTeam, Highlight, HighlightItem, Stepper, StepperItem, WebpressGallery, WebpressGalleryItem, Feedback, FeedbackItem, Contact, Client, ClientItem, Footer, FooterItem, WpCoreImage, SliderItem, FooterTop, FooterTopItem];

  const config: EditorConfig = {
    apiUrl: 'http://truyenhinhanvien.s.v01.webpress.com.vn',
    token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvdHJ1eWVuaGluaGFudmllbi5zLnYwMS53ZWJwcmVzcy5jb20udm5cL2FwaVwvY29ubmVjdCIsImlhdCI6MTY0MjE0MzQ4OSwiZXhwIjoxNjQ0NzM1NDg5LCJuYmYiOjE2NDIxNDM0ODksImp0aSI6ImY3bnpsbU1BMGtZQ1BweWciLCJzdWIiOjYsInBydiI6ImY5MzA3ZWI1ZjI5YzcyYTkwZGJhYWVmMGUyNmYwMjYyZWRlODZmNTUifQ.ZinIi3q8xhRkzXTYhfBza-OCfUm-Rp52699mijd9Mjs'
  }

  return (
    <div className='container'>
      <div className='edit-page'>
        <WebpressEditor
          contentBlocks={blocks}
          customBlocks={customBlocks}
          onSave={onSave}
          enableBreadcrumb={true}
          config={config}
        />
      </div>
    </div>
  );
}


export default App;
