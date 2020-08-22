<template>
    <div>
        <p>This is dashboard</p>
        <p>welcome {{fname}}</p>
        <p>welcome {{lname}}</p>
    </div>
</template>

<script>
export default {
    props: ['fname', 'lname']
}
</script>