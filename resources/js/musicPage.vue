<template>
    <div>
        <ul>
            <li v-for="song in musicList" :key="song.id">
                {{ song.title }} by {{ song.artist }}
                <button @click="playMusic(song.id)">Play</button>
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            musicList: [],
        };
    },
    methods: {
        getMusicList() {
            axios.get('/music')
                .then(response => {
                    this.musicList = response.data.musicList;
                })
                .catch(error => {
                    console.error(error);
                });
        },
        playMusic(musicId) {
            axios.post('/music/play', {
                musicId: musicId,
            })
                .then(response => {
                    console.log(response.data.message);
                })
                .catch(error => {
                    console.error(error);
                });
        },
    },
    created() {
        this.getMusicList();
    },
};
</script>
