<template>
    <v-app>
        <Header></Header>
        <Sidebar></Sidebar>
        <v-main>
            <v-container class="pa-10">
                <v-card class="pt-2 pl-5 pr-5">
                    <v-card-title class="border-b-2">ユーザー登録</v-card-title>
                    <h1>お名前</h1>
                    <v-text-field
                        v-model="setFamilyName"
                        :rules="rules"
                        label="性"
                        outlined
                    />
                    <v-text-field
                        v-model="setFirstName"
                        :rules="rules"
                        label="名"
                        outlined
                    />
                    <h1>お名前(カナ)</h1>
                    <v-text-field
                        v-model="setFamilyNameKana"
                        :rules="rules"
                        label="セイ"
                        outlined
                    />
                    <v-text-field
                        v-model="setFirstNameKana"
                        :rules="rules"
                        label="メイ"
                        outlined
                    />
                    <h1>性別</h1>
                    <v-select
                        v-model="setSex"
                        :items="sex"
                        outlined
                    ></v-select>
                    <h1>アーティスト名</h1>
                        <v-text-field
                        v-model="setArtistName"
                        :rules="rules"
                        outlined
                    />
                    <h1>メールアドレス</h1>
                    <v-text-field
                        v-model="setMailAddress"
                        :rules="rules"
                        outlined
                    />
                    <h1>確認のため再度入力してください</h1>
                    <v-text-field
                        v-model="setMailAddress"
                        :rules="rules"
                        outlined
                    />
                    <h1>電話番号(ハイフンなし)</h1>
                    <v-text-field
                        v-model="setTell"
                        :rules="rules"
                        outlined
                    />
                    <h1>住所</h1>
                    <v-text-field
                        v-model="setPostCode"
                        :rules="rules"
                        label="郵便番号"
                        outlined
                    />
                    <v-text-field
                        v-model="setAddress1"
                        :rules="rules"
                        label="都道府県"
                        outlined
                    />
                    <v-text-field
                        v-model="setAddress2"
                        :rules="rules"
                        label="市区町村"
                        outlined
                    />
                    <v-text-field
                        v-model="setAddress3"
                        :rules="rules"
                        label="番地"
                        outlined
                    />
                    <v-text-field
                        v-model="setAddress4"
                        :rules="rules"
                        label="建物名と部屋番号"
                        outlined
                    />                    
                    <h1>プロフィール</h1>
                    <v-text-field
                        v-model="setPostCode"
                        :rules="rules"
                        label="ご自身のプロフィールを記入できます。自由記入欄になります。"
                        outlined
                    />



                    
                    <v-card-actions class="ma-5" v-if="layoutDisplay == true">
                        <v-spacer></v-spacer>
                        <v-icon icon large class="mx-2">mdi-format-list-bulleted-square</v-icon>
                        <v-icon icon large class="mx-2">mdi-view-grid-outline</v-icon>
                        <v-icon icon large class="mx-2">mdi-grid</v-icon>
                    </v-card-actions>
                    <v-container fluid>
                        <v-row>
                            <v-col
                                v-for="card in cards"
                                :key="card.title"
                                xs="12"
                                sm="6"
                                md="4"
                            >
                                <v-card flat>
                                    <v-card-text>
                                        <v-img
                                            :src="card.src"
                                            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                            class="mx-auto my-0"

                                        >
                                        </v-img>
                                    </v-card-text>
                                    <v-card-actions class="pa-3">
                                        {{ card.title }}
                                    </v-card-actions>
                                    <div class="dashed"></div>
                                    <v-card-actions class="pa-3">
                                        <v-spacer></v-spacer>
                                        {{ card.creator }}
                                    </v-card-actions>
                                    <div class="dashed"></div>
                                    <v-card-actions class="pa-3">
                                        <v-btn>入札</v-btn>
                                        <v-spacer></v-spacer>
                                        <v-icon icon v-on:click="">mdi-heart-outline</v-icon>
                                    </v-card-actions>
                                    <div class="dashed"></div>
                                </v-card>
                            </v-col>
                        </v-row>
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
