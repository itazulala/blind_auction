<template>
    <v-app>
        <Header></Header>
        <Sidebar></Sidebar>
        <v-main class="blue-grey lighten-5">
            <v-container class="pa-10">
                <v-card class="pt-5 pb-5 pl-10 pr-10">
                    <v-card-title class="border-b-2 mb-5 text-subtitle-1">ランキング</v-card-title>
                    <v-row>
                        <v-col
                            v-for="item in items"
                            :key="item.img"
                            cols="2"
                        >
                            <v-card-text>
                                <v-img :src="item.img"></v-img>
                            </v-card-text>
                            <v-card-text class="dashed caption">作品名: {{ item.title }}</v-card-text>
                            <v-card-text class="dashed caption">作者名: {{ item.artist }}</v-card-text>
                        </v-col>
                    </v-row>
                    <v-card-text class="caption text-right"><a href="#">もっと見る</a></v-card-text>
                </v-card>
                <v-card
                    v-for="feature in features"
                    :key="feature.mainTitle"
                    class="mt-10 pt-5 pb-5 pl-10 pr-10"
                >
                    <v-card-title class="border-b-2 mb-5 text-subtitle-1">{{ feature.mainTitle }}</v-card-title>
                    <v-row>
                        <v-col
                            v-for="item in feature.items"
                            :key="item.img"
                            cols="2"
                        >
                            <v-card-text><v-img :src="item.img"></v-img></v-card-text>
                            <v-card-text class="dashed caption">作品名: {{ item.title }}</v-card-text>
                            <v-card-text class="dashed caption">作者名: {{ item.artist }}</v-card-text>
                        </v-col>
                    </v-row>
                </v-card>
            </v-container>
        </v-main>
        <Footer></Footer>
    </v-app>
</template>
<script>
import Header from "./compornets/Header";
import Sidebar from "./compornets/Sidebar";
import Footer from "./compornets/Footer";

export default {
    name: 'app',
    components: {
        Sidebar,
        Header,
        Footer
    },
    data() {
        return {
            items: [
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house.png', title: '雨笠の家', artist: '雨笠 将'},
            ],
            features: [
                {
                    mainTitle: '特集1',
                    items: [
                        {img: 'storage/images/amagasa_zange.png', title: '雨笠の懺悔', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_zange.png', title: '雨笠の懺悔', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_zange.png', title: '雨笠の懺悔', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_zange.png', title: '雨笠の懺悔', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_zange.png', title: '雨笠の懺悔', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_zange.png', title: '雨笠の懺悔', artist: '雨笠 将'},
                    ]
                },
                {
                    mainTitle: '特集2',
                    items: [
                        {img: 'storage/images/amagasa_mother.png', title: '雨笠の母', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_mother.png', title: '雨笠の母', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_mother.png', title: '雨笠の母', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_mother.png', title: '雨笠の母', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_mother.png', title: '雨笠の母', artist: '雨笠 将'},
                        {img: 'storage/images/amagasa_mother.png', title: '雨笠の母', artist: '雨笠 将'},
                    ]
                }
            ]
        }
    }
}
</script>
