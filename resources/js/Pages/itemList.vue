<template>
    <v-app>
        <Header></Header>
        <Sidebar></Sidebar>
        <v-main class="blue-grey lighten-5">
            <v-container class="pa-10">
                <v-card class="pa-5">
                    <v-card-title class="pt-0 border-b-2 text-subtitle-1">作品一覧</v-card-title>
                    <v-card-actions class="ma-5">
                        <v-spacer></v-spacer>
                        <v-icon icon large class="mx-2">mdi-format-list-bulleted-square</v-icon>
                        <v-icon icon large class="mx-2">mdi-view-grid-outline</v-icon>
                        <v-icon icon large class="mx-2">mdi-grid</v-icon>
                    </v-card-actions>
                    <v-row>
                        <v-col
                            v-for="item in items"
                            :key="item.img"
                            xs="12"
                            sm="6"
                            md="4"
                        >
                            <v-card-text>
                                <v-img
                                    :src="item.img"
                                    max-height="150px"
                                    max-width="150px"
                                    class="mx-auto my-0"
                                ></v-img>
                            </v-card-text>
                            <v-card-text class="dashed pa-5">作品名:　{{ item.title }}</v-card-text>
                            <v-card-text class="dashed pa-5">作者名:　{{ item.artist }}</v-card-text>
                            <v-card-actions class="dashed pa-5">
                                <v-btn>入札</v-btn>
                                <v-spacer></v-spacer>
                                <v-icon icon v-on:click="">mdi-heart-outline</v-icon>
                            </v-card-actions>
                        </v-col>
                    </v-row>
                </v-card>
            </v-container>
<!--                    <v-container fluid>-->
<!--                        <v-row>-->
<!--                            <v-col-->
<!--                                v-for="card in cards"-->
<!--                                :key="card.title"-->
<!--                                xs="12"-->
<!--                                sm="6"-->
<!--                                md="4"-->
<!--                            >-->
<!--                                <v-card flat>-->
<!--                                    <v-card-text>-->
<!--                                        <v-img-->
<!--                                            :src="card.src"-->
<!--                                            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"-->
<!--                                            class="mx-auto my-0"-->

<!--                                        >-->
<!--                                        </v-img>-->
<!--                                    </v-card-text>-->
<!--                                    <v-card-actions class="pa-3">-->
<!--                                        {{ card.title }}-->
<!--                                    </v-card-actions>-->
<!--                                    <div class="dashed"></div>-->
<!--                                    <v-card-actions class="pa-3">-->
<!--                                        <v-spacer></v-spacer>-->
<!--                                        {{ card.creator }}-->
<!--                                    </v-card-actions>-->
<!--                                    <div class="dashed"></div>-->
<!--                                    <v-card-actions class="pa-3">-->
<!--                                        <v-btn>入札</v-btn>-->
<!--                                        <v-spacer></v-spacer>-->
<!--                                        <v-icon icon v-on:click="">mdi-heart-outline</v-icon>-->
<!--                                    </v-card-actions>-->
<!--                                    <div class="dashed"></div>-->
<!--                                </v-card>-->
<!--                            </v-col>-->
<!--                        </v-row>-->
<!--                    </v-container>-->
<!--                </v-card>-->
<!--            </v-container>-->
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
                {img: 'storage/images/amagasa_zange.png', title: '雨笠の懺悔', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_mother.png', title: '雨笠の母', artist: '雨笠 将'},
                {img: 'storage/images/amagasa_house2.png', title: '雨笠の家2', artist: '雨笠 将'},
                {img: 'storage/images/fujisan.png', title: '富士山', artist: '雨笠 将'},
            ]
        }
    }
}
</script>
