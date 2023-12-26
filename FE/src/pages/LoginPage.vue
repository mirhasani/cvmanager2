<template>
  <q-page padding>
    <!-- content -->
    <h4 class="text-center">فرم ورود</h4>
    <div class="row justify-center">
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
        <q-input
          placeholder="9112746075"
          label="mobile"
          rounded
          outlined
          class="q-mt-lg"
          type="text"
          v-model="mobile"
          ref="mobileRef"
          autocomplete="off"
          :rules="[val => !!val || 'Field is required' ,
           val => val.length === 10 ||  'Please enter 10 characters' ]"
        />

        <q-btn
          outline
          class="full-width q-mt-md q-py-sm"
          color="light-blue-6"
          label="بزن بریم"
          icon="security"
          rounded
          outlined
          @click="login"
        />
      </div>
    </div>
  </q-page>
</template>

<script>
import { api } from "src/boot/axios";
import { defineComponent, ref } from "vue";
import { useRouter } from "vue-router";
import { useAppDataStore } from "src/stores/appData";
import { useQuasar } from "Quasar";

export default defineComponent({
  name: "PageName",
  setup() {
    const q = useQuasar();
    const mobileRef = ref();
    const appData = useAppDataStore();
    const mobile = ref("");
    const router = useRouter();
    function login() {
      mobileRef.value.validate()
        if (mobileRef.value.hasError ) {
        q.notify({
            color: 'negative',
            position : 'top' ,
            message: 'please check your input!'
          })
        }else{
          if (mobile.value) {
        if(mobile.value.length === 10 ){
        appData.userMobile = mobile.value
        api.post("api/admin/send-vc", {
            mobile: mobile.value,
          })
          .then((r) => {
            console.log(r.data);
            if (r.data) {
              router.push('/confirm');
            }else{
              alert('مشکلی پیش آمده لطفا بعدا دوباره تست نمایید')
            }
          });
        } else{
        alert("mobile not match")
      }
      }else{
        alert("Enter Data")
      }
    }
        }


    return {
      mobile,
      login ,
      mobileRef
    };
  },
});
</script>
