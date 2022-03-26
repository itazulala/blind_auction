<template>
    <v-app>
        <Header></Header>
        <Sidebar></Sidebar>
        <v-main>
            <v-container class="pa-10">
                <v-card class="pt-2 pl-5 pr-5">
                    <!--コンソールBOX-->
                    <v-card-title class="border-b-2" style="">各種設定</v-card-title>
                    <div style="display: flex; flex-wrap: wrap;margin: justify-content: center;">
                        <!--出品関連-->
                        <div style="width: 45%; height: 200px; margin: 2%; border: double; border-radius: 10px; font-size: 24px; ">
                            <h1>出品関連</h1>
                            <a href="/">・出品</a><br>
                            <a href="/">・作品管理</a>
                        </div>
                        <!--入札関連-->
                        <div style="width: 45%; height: 200px; margin: 2%; border: double; border-radius: 10px; font-size: 24px; ">
                            <h1>入札関連</h1>
                            <a href="/">・閲覧履歴</a><br>
                            <a href="/">・お気に入り</a><br>
                            <a href="/">・入札中の作品</a><br>
                            <a href="/">・落札した作品</a><br>
                        </div>
                        <!--設定関連-->
                        <div style="width: 45%; height: 200px; margin: 2%; border: double; border-radius: 10px; font-size: 24px; ">
                            <h1>設定関連</h1>
                            <a href="/">・アカウント情報の変更</a><br>
                            <a href="/">・振込設定</a><br>
                            <a href="/">・退会する</a><br>
                        </div>
                        <!--現状未定の項目-->
                        <div style="width: 45%; height: 200px; margin: 2%; border: double; border-radius: 10px; font-size: 24px; ">

                        </div>
                    </div>


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
            drawer: null,
            selectedItem: 1,
            items: [
                {text: '入札中', icon: 'mdi-gavel', link: '#'},
                {text: '入金待ち', icon: 'mdi-currency-jpy', link: '#'},
                {text: '受取待ち', icon: 'mdi-truck-delivery-outline', link: '#'},
            ],
            kinds: [
                ['絵画', ""],
                ['日本画', ""],
                ['油絵', ""],
                ['水彩画', ""],
                ['ペン画', ""],
                ['イラスト', ""],
                ['ポスター', ""],
                ['ポストカード', ""],
                ['版画', ""]
            ],
            colors: [
                ['赤', ""],
                ['青', ""],
                ['黄色', ""],
                ['ピンク', ""],
                ['白', ""],
                ['黒', ""],
                ['緑', ""],
                ['モノクロ', ""],
                ['カラフル', ""],
                ['パステル', ""]
            ],
            sises: [
                ['用紙サイズ', ""],
                ['', ""],
            ],
            sex: ['男性', '女性', '非公開'],

            cards: [
                {title: 'お家', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', creator: '渡邉 優太'},
                {title: 'お家', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', creator: '渡邉 優太'},
                {title: 'お家', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', creator: '渡邉 優太'},
                {title: 'お家', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', creator: '渡邉 優太'},
                {title: 'お家', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', creator: '渡邉 優太'},


            ]
        }
    }
}
</script>
