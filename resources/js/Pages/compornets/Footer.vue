<template>
    <v-footer color="#707070" light absolute app>
        <v-container>
            <v-row>
                <v-col>
                    Blind Auction
                </v-col>
                <v-col>
                    <v-list color="#707070">
                        <v-list-item-group
                            v-model="selectedItem"
                        >
                            <v-list-item
                                v-for="(item, i) in items1"
                                :key="i"
                                :to="item.link"
                            >
                                <v-list-item-content class="text-caption">
                                    {{ item.text }}
                                </v-list-item-content>
                            </v-list-item>
                        </v-list-item-group>
                    </v-list>
                </v-col>
                <v-col>
                    <v-list color="#707070">
                        <v-list-item-group
                            v-model="selectedItem"
                        >
                            <v-list-item
                                v-for="(item, i) in items2"
                                :key="i"
                                :to="item.link"
                            >
                                <v-list-item-content class="text-caption">
                                    {{ item.text }}
                                </v-list-item-content>
                            </v-list-item>
                        </v-list-item-group>
                    </v-list>
                </v-col>
            </v-row>
        </v-container>
    </v-footer>
</template>
<script>
export default {
    name: 'app',
    data() {
        return {
            selectedItem: 1,
            items1: [
                {text: 'ブラインドオークションとは', link: '#'},
                {text: '会社概要', link: '#'},
                {text: 'よくある質問', link: '#'},
                {text: 'アーティストの皆様へ', link: '#'},
                {text: 'アーティストの登録方法', link: '#'},
            ],
            items2: [
                {text: '作品一覧', link: '#'},
                {text: 'サイズ一覧', link: '#'},
                {text: '購入方法', link: '#'},
                {text: '配送方法 | 送料・代引き方法について', link: '#'},
            ],
        }
    }
}
</script>
