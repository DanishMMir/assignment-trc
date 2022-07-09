require('./bootstrap');
import {createApp} from 'vue'

import SnippetData from './components/SnippetData.vue'
import LinkData from './components/LinkData.vue'
import FileData from './components/FileData.vue'

const app = createApp({})

app.component('snippet-data', SnippetData)
app.component('link-data', LinkData)
app.component('file-data', FileData)

app.mount('#app')

