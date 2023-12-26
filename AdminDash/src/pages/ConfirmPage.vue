<template>
  <q-page padding >
    <h4 class="text-center">  فرم تایید </h4>
    <!-- content -->
    <div class="row justify-center">
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
     <q-input
     placeholder="enter password"
     label="password"
     rounded outlined
     class="q-mt-lg"
     type="password"
     v-model="password"
     ref="passwordRef"
     autocomplete="off"
     :rules="[val => !!val || 'Field is required' ,
     val => val.length > 5 ||  'Please enter at least 5 characters' ]"
      />

    <q-btn outline
    class="full-width q-mt-md q-py-sm "
    @click="verify"
     color="light-blue-6" label="ورود "  rounded outlined
     />
      </div>
    </div>

  </q-page>
</template>


<script>
import { api } from "src/boot/axios";
import { defineComponent, ref } from "vue"
import { useRouter } from "vue-router";
import { useAppDataStore } from 'src/stores/appData';
import { useQuasar } from "Quasar";

export default defineComponent({
  name: "PageName",
  setup() {
    const q = useQuasar();
    const passwordRef = ref();
    const appData = useAppDataStore() ;
    const router = useRouter();
    const password = ref(null);
    function verify(){
      passwordRef.value.validate()
      if (passwordRef.value.hasError ) {
        q.notify({
            color: 'negative',
            position : 'top' ,
            message: 'please check your input!'
          })
        }else{
          if(password.value){
        if(password.value === '12345678'){
        api.post('api/admin/auth', {
          username : appData.userMobile,
          password : password.value
        })
        .then((r) =>{
          if(r.data.access_token){
              q.cookies.set('access_token' , r.data.access_token , {expires: '365d'})
              q.cookies.set('refresh_token' , r.data.refresh_token , {expires: '365d'})
              q.cookies.set('expires_in' , r.data.expires_in , {expires: '365d'})
            }
            router.push('/dashboard');
        });
      }else{
        alert("password not match")
      }
   }
     else{
        alert('enter data')
      }
    }
        }

    return {
      password,
      verify ,
      passwordRef

    };
  },
});
</script>

