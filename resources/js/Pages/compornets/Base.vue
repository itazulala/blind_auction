<template>
    <v-app>
        <!--   サイドメニュー   -->
            <v-navigation-drawer v-model="drawer" clipped app max>
                <!--   利用状況   -->
                <v-list>
                    <v-subheader class="text-h6">利用状況</v-subheader>
                    <v-list-item-group
                        v-model="selectedItem"
                    >
                        <v-list-item
                            v-for="(item, i) in items"
                            :key="i"
                            :to="item.link"
                        >
                            <v-list-item-icon>
                                <v-icon v-text="item.icon"></v-icon>
                            </v-list-item-icon>
                            <v-list-item-content class="text-caption">
                                {{ item.text }}
                            </v-list-item-content>
                        </v-list-item>
                    </v-list-item-group>
                </v-list>
                <v-divider></v-divider>
                <!--   検索条件   -->
                <v-list height="36">
                    <v-subheader class="text-h6">検索条件</v-subheader>
                    <v-list-group
                        prepend-icon="mdi-bookshelf"
                        no-action
                        class="text-caption"
                    >
                        <template v-slot:activator>
                            <v-list-item-content>ジャンルで探す</v-list-item-content>
                        </template>

                        <v-list-item
                            v-for="([title, icon], i) in kinds"
                            :key="i"
                            link
                        >
                            <v-list-item-content v-text="title"></v-list-item-content>
                        </v-list-item>
                    </v-list-group>
                    <v-list-group
                        prepend-icon="mdi-palette-outline"
                        no-action
                        class="text-caption"
                    >
                        <template v-slot:activator>
                            <v-list-item-content>色で探す</v-list-item-content>
                        </template>

                        <v-list-item
                            v-for="([title, icon], i) in colors"
                            :key="i"
                            link

                        >
                            <v-list-item-content v-text="title"></v-list-item-content>
                        </v-list-item>
                    </v-list-group>
                    <v-list-group
                        prepend-icon="mdi-image-size-select-large"
                        no-action
                        class="text-caption"
                    >
                        <template v-slot:activator>
                            <v-list-item-content>サイズで探す</v-list-item-content>
                        </template>

                        <v-list-item
                            v-for="([title, icon], i) in sises"
                            :key="i"
                            link
                        >
                            <v-list-item-content v-text="title"></v-list-item-content>
                        </v-list-item>
                    </v-list-group>
                </v-list>
            </v-navigation-drawer>
            <v-app-bar light clipped-left app>
                <v-app-bar-nav-icon @click="drawer=!drawer"></v-app-bar-nav-icon>
                <v-toolbar-title>Blind Auction</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-icon large class="mx-2" v-on:click="">
                    mdi-information-outline
                </v-icon>
                <v-icon large class="mx-2" v-on:click="">
                    mdi-clipboard-text-outline
                </v-icon>
                <v-icon large class="mx-2" v-on:click="">
                    mdi-star-outline
                </v-icon>
                <v-icon large class="mx-2" v-on:click="">
                    mdi-login
                </v-icon>
            </v-app-bar>
        <v-main class="bg-gray-200">
            <slot></slot>
        </v-main>
            <v-footer color="#707070" light app>
                Vuetify
            </v-footer>
    </v-app>
</template>
<script>
export default {
    name: 'app',
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
            ]
        }
    }
}
</script>
