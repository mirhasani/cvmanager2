<template>
  <router-view />
</template>
<script>
import { defineComponent } from 'vue'
export default defineComponent({
  name: 'App'
})
</script>
<style>
.roundCard {
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
  overflow: hidden !important;
}
.slide .roundCard,
.roundCard .recipeIMG {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 100%;
}
.enNumSans {
  font-family: IranSans !important;
}
.enNumSans {
  font-family: IranSans !important;
}
.storyTitle{
  padding: 5px 0 7px 0;
}
.storyAvatar {
  background: none;
  width: 82px;
  height: 82px;
  display: flex;
  align-items: center;
  position: relative;
  box-sizing: border-box;
  color: #fff;
  background: #fff;
  background-clip: padding-box;
  border: solid 2px transparent;
  border-radius: 50%;
  margin: auto;
}
.storyAvatar:before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: -1;
  margin: -2px;
  border-radius: inherit;
  background: rgb(230, 0, 62);
  background: -moz-linear-gradient(
    220deg,
    rgba(230, 0, 62, 1) 0%,
    rgba(254, 160, 0, 1) 100%
  );
  background: -webkit-linear-gradient(
    220deg,
    rgba(230, 0, 62, 1) 0%,
    rgba(254, 160, 0, 1) 100%
  );
  background: linear-gradient(
    220deg,
    rgba(230, 0, 62, 1) 0%,
    rgba(254, 160, 0, 1) 100%
  );
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e6003e",endColorstr="#fea000",GradientType=1);
}
</style>
