<template>
    <v-app>
        <!-- サイドメニュー -->
        <v-expansion-panels>
            <v-expansion-panel
                v-for="list in lists"
                :key="list.id"
            >
                <v-expansion-panel-header>
                    {{ list.title }}
                </v-expansion-panel-header>
                <v-expansion-panel-content>
                    {{ list.text }}
                </v-expansion-panel-content>
            </v-expansion-panel>
        </v-expansion-panels>

        <!-- ヘッダー -->
        <v-app-bar app clippedLeft flat light color="white">
            <v-app-bar-nav-icon color="black" @click.stop="drawer=!drawer"></v-app-bar-nav-icon>
            <v-toolbar-title color="black">Blind Auction</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-icon
                large
                color="green darken-2"
                class="mx-5"
            >
                mdi-domain
            </v-icon>

            <v-icon
                large
                color="blue darken-2"
                class="mx-5"
            >
                mdi-message-text
            </v-icon>

            <v-icon
                large
                color="purple darken-2"
                class="mx-5"
            >
                mdi-dialpad
            </v-icon>

            <v-icon
                large
                color="teal darken-2"
                class="mx-5"
            >
                mdi-email
            </v-icon>
            <v-icon
                large
                color="teal darken-2"
                class="mx-5"
            >
                mdi-email
            </v-icon>
        </v-app-bar>

        <!-- メイン -->
        <v-main>
            <v-container fluid>
            </v-container>
        </v-main>

        <!-- フッター -->
        <v-footer app color="primary">
        </v-footer>
    </v-app>
</template>
<script>
export default {
    name: 'app',
    data() {
        return {
            drawer: true
        }
    }
}
</script>
