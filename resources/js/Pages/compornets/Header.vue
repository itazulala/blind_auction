<template>
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
</template>
<script>
export default {
    name: 'app',
    data() {
        return {}
    }
}
</script>
