<template>
    <v-app>
        <Header></Header>
<!--        <Sidebar></Sidebar> -->
        <v-main>
            <v-container class="pa-10">
                <h1>ログイン</h1>
                <v-card class="pt-2 pl-5 pr-5">
                    <!--ログインBOX-->
                    <v-container fluid>
                        <v-row>
                            <v-col
                                v-for="card in cards"
                                :key="card.title"
                                xs="12"
                                sm="6"
                                md="4"
                            >
                            </v-col>
                        </v-row>
                        <!--ログイン入力部-->
                        <div style="max-width:344px; display:block; margin:auto;">
                            <!--メールアドレス-->
                            <h1>メールアドレス</h1>
                            <v-text-field
                                v-model="email"
                                :rules="rules"
                                autofocus
                                height="48px"
                                outlined
                                placeholder="メールアドレス"
                            ></v-text-field>
                            <!--パスワード-->
                            <h1>パスワード</h1>
                            <v-text-field
                                v-model="password"
                                :rules="rules"
                                :type="passwordShow ? 'text' : 'password'"
                                height="48px"
                                outlined
                                placeholder="パスワード"
                            ></v-text-field>
                        </div>
                        <!--ログインボタン-->
                        <div style="max-width:344px; display:block; margin:auto;">
                            <v-btn style=" display:block; margin:auto;"
                                rounded
                                color="grey"
                                dark
                                width="200px"
                            >
                            ログイン
                            </v-btn>
                        </div>
                        <!--各リンク-->
                        <div style=" display:block; margin:auto;">
                            <!--パスワードを忘れた方-->
                            <div style="text-align: left;">
                                <a href="/signin">パスワードを忘れた方はコチラ</a>
                            </div>
                            <br>
                            <!--アカウントをお持ちでないですか？-->
                            <div style="text-align: right;">
                                <h1>アカウントをお持ちでないですか？</h1>
                                <a href="/signin">アカウント登録</a>
                            </div>
                        </div>
                    </v-container>
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
