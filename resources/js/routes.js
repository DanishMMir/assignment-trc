// const Welcome = () => import('./components/Welcome.vue' /* webpackChunkName: "resource/js/components/welcome" */)
const Admin = () => import('./components/Admin' /* webpackChunkName: "resource/js/components/category/list" */)
// const CategoryCreate = () => import('./components/category/Add.vue' /* webpackChunkName: "resource/js/components/category/add" */)
// const CategoryEdit = () => import('./components/category/Edit.vue' /* webpackChunkName: "resource/js/components/category/edit" */)

export const routes = [
    {
        name: 'admin',
        path: '/admin',
        component: Admin
    }
]
