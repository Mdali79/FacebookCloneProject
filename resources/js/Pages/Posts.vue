<script setup>
import MainNavLayout from '@/Layouts/MainNavLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import Post from '@/Components/Post.vue';
import CreatePostBox from '@/Components/CreatePostBox.vue';
 
import Magnify from 'vue-material-design-icons/Magnify.vue'
import Flag from 'vue-material-design-icons/Flag.vue'
import ClockTimeTwoOutline from 'vue-material-design-icons/ClockTimeTwoOutline.vue'
import restore from 'vue-material-design-icons/Restore.vue'
import VideoImage from 'vue-material-design-icons/VideoImage.vue'
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue'

import TelevisionPlay from 'vue-material-design-icons/TelevisionPlay.vue'
import StorefrontOutline from 'vue-material-design-icons/StorefrontOutline.vue'
import AccountGroup from 'vue-material-design-icons/AccountGroup.vue'
import ControllerClassicOutline from 'vue-material-design-icons/ControllerClassicOutline.vue'
defineProps({ posts: Object })
const user = usePage().props.auth.user
</script>

<template>
    <Head title="Posts" />


    <MainNavLayout>

         <div class="fixed w-full h-[100%] bg-[#F1F2F5]">
            <div class="grid grid-rows-3 grid-flow-col w-full max-w-[1600px] mt-[56px] h-[calc(100%-56px)] mx-auto px-4">

                <div id="LeftSection" class="xl:w-[345px] lg:block hidden"></div>


               <div id="PostsSection" class="row-span-6 max-w-[600px] lg:mx-0 mx-auto overflow-auto">

                <CreatePostBox
                        :image="user.image"
                        :placeholder="'What\'s on your mind '+ user.name"
                    />

                    

           
      
                
                
                
                
              
                    <div v-for="post in posts.data" :key="post">
                        <Post :user="post.user" :post="post" :comments="post.comments" />
                    </div>
                   

                </div>

                <div id="RightSection" class="pl-4 md:block hidden"></div>

            </div>

         </div>  


    </MainNavLayout>
     
</template>
