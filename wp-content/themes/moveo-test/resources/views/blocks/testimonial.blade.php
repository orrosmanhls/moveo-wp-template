{{--
Title: Testimonial
Description: A testimonial test
Category: Moveo
Icon: admin-comments
Keywords: testimonial moveo
Mode: edit
Align: center
SupportsAlign: left right
SupportsMode: false
SupportsMultiple: false
--}}

<blockquote data-{{ $block['id'] }} class="{{ $block['classes'] }} testimonial-block">
  <p>{{ get_field('testimonial') }}</p>
  <cite>
    <span>{{ get_field('author') }}</span>
  </cite>
</blockquote>