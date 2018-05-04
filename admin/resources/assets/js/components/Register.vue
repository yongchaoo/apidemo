<template>
    <div>
        <div class="alert alert-danger" v-if="error && !success">
            <p>出错了，很遗憾，未能完成注册</p>
        </div>
        <div class="alert alert-success" v-if="success">
            <p>注册完成，你现在可以<router-link :to="{name:'login'}">登录</router-link>了</p>
        </div>
        <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.name }">
                <label for="name">用户名</label>
                <input type="text" id="name" class="form-control" v-model="name" required>
                <span class="help-block" v-if="error && errors.name">{{ errors.name }}</span>
            </div>
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.email }">
                <label for="email">邮箱</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
                <span class="help-block" v-if="error && errors.email">{{ errors.email }}</span>
            </div>
            <div class="form-group" v-bind:class="{ 'has-error': error && errors.password }">
                <label for="password">密码</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
                <span class="help-block" v-if="error && errors.password">{{ errors.password }}</span>
            </div>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "home"
    }
</script>

<style lang="less">

</style>