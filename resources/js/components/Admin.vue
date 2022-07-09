<template>
    <main>
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
            <div className="container-fluid">
                <router-link to="/" className="navbar-brand" href="#">Laravel Vue Crud App - TechvBlogs</router-link>
                <div className="collapse navbar-collapse">
                    <div className="navbar-nav">
                        <router-link exact-active-class="active" to="/" className="nav-item nav-link">Home</router-link>
                        <router-link exact-active-class="active" to="/category" className="nav-item nav-link">Category
                        </router-link>
                    </div>
                </div>
            </div>
        </nav>
        <div className="container mt-5">
            <router-view></router-view>
        </div>
    </main>
</template>

<script>
export default {}
</script>
