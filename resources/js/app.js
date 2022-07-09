require('./bootstrap');
import {createApp} from 'vue'
import VueAxios from 'vue-axios';
import axios from 'axios';
// Vue.use(VueAxios, axios);

import SnippetData from './components/SnippetData.vue'
import LinkData from './components/LinkData.vue'
import FileData from './components/FileData.vue'

const app = createApp({})

app.use(VueAxios,axios);

app.component('snippet-data', SnippetData)
app.component('link-data', LinkData)
app.component('file-data', FileData)

app.mount('#app')

