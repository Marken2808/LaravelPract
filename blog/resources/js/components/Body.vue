<template>
    <div id="body">
        <h1>Body</h1>
        <LeftBody/>
        <RightBody/>
    </div>
</template>

<script>
import LeftBody from './LeftBody';
import RightBody from './RightBody';
export default {
    components: {
        RightBody,
        LeftBody
    },
}
</script>

<style>

</style>