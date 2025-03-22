<template >
        <header class="h-20 flex gap-4 justify-between bg-blue-300">
            <div class="bg-green-400">
                <Link href="/" >Home</Link>             
            </div>

            <nav class="bg-yellow-400">
                <ul>
                    <li>  
                        <Link href="/About">About</Link>
                        <Link href="/">Services</Link>
                        <Link href="/">Tourist Spot</Link>
                        <Link href="/">Blogs</Link>
                        <Link href="/">Contact</Link>
                        
                    </li>
                </ul>                
            </nav>

        </header>


</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
</script>