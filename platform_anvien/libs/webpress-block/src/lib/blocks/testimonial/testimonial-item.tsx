import { useState } from 'react';

import { Input } from 'antd';

import {
  Media,
  MediaSelector,
} from '@vicoders/editor';

import { Testimonial } from './testimonial.model';

const { TextArea } = Input;
interface Props {
  data: Testimonial,
  onChangeCallback: (item: Testimonial, data: Record<string, string>) => void;
}
export default function TestimonialItem(props: Props) {
  const [item, setItem] = useState(props.data);
  const [isMediaModalActive, setIsMediaModalActive] = useState(false);
  const handleChange = (message: string) => {
    setItem({ ...item, ...{ message } });
    props.onChangeCallback(props.data, { message });
  }

  const showMediaModal = () => {
    setIsMediaModalActive(!isMediaModalActive);
  }

  const onSelect = (media: Media | undefined) => {
    if (media) {
      setItem({ ...item, ...{ img: media.original_url } });
      props.onChangeCallback(props.data, { img: media.original_url });
    }
  }
  return (
    <div className="testimonial edit">
      <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{width:1, height:1}} />
      <div className="testimonial__item d-flex">
        <div className="testimonial__item__image" onClick={showMediaModal} style={{ backgroundImage: `url("${item.img}")` }}>
        </div>
        <div className="testimonial__item__message flex-grow-1">
          <TextArea showCount value={item.message} maxLength={200} style={{ height: 120 }} onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => handleChange(e.target.value)} />
        </div>
      </div>
    </div>
  )
}
