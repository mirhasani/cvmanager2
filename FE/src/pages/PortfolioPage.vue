<template>
  <div class="swiper-container text-center">
    <h4>نمونه کارهای من </h4>
    <swiper style="width:300px" class="full-width" :slides-per-view="4" :space-between="0">
<swiper-slide class="slide roundCard">
       <div class="storyAvatar flex flex-center">
          <q-avatar  size="72px">
            <q-img src="public/images/img-1.jpg" />
          </q-avatar>
        </div>
        <!-- <div class="text-grey-7 text-caption text-center ellipsis"> رزومه نمونه اول </div> -->
</swiper-slide>
<swiper-slide class="slide roundCard">
       <div class="storyAvatar flex flex-center">
          <q-avatar  size="72px">
            <q-img src="public/images/img-2.jpg" />
          </q-avatar>
        </div>
</swiper-slide>
<swiper-slide class="slide roundCard">
       <div class="storyAvatar flex flex-center">
          <q-avatar  size="72px">
            <q-img src="public/images/img-3.jpg" />
          </q-avatar>
        </div>
</swiper-slide>
<swiper-slide class="slide roundCard">
       <div class="storyAvatar flex flex-center">
          <q-avatar  size="72px">
            <q-img src="public/images/img-4.jpg" />
          </q-avatar>
        </div>
</swiper-slide>
<swiper-slide class="slide roundCard">
       <div class="storyAvatar flex flex-center">
          <q-avatar  size="72px">
            <q-img src="public/images/img-5.jpg" />
          </q-avatar>
        </div>
</swiper-slide>
    </swiper>
  </div>
</template>
<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {};
  },
};
</script>
<style>
.swiper-container {
  height: 300px;
}
.swiper-slide {
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 60px;
}
</style>
