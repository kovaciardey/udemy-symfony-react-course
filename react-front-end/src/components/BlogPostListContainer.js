import React from 'react';
import BlogPostList from "./BlogPostList";

class BlogPostListContainer extends React.Component {
    constructor(props) {
        super(props);
        console.log(props)
        this.posts = [
            {
                id: 1,
                title: "Hello"
            },
            {
                id: 2,
                title: "Another Post"
            },
            {
                id: 3,
                title: "Another Hello"
            }
        ];
    }

    render() {
        return (<BlogPostList posts={this.posts} />)
    }
}

export default BlogPostListContainer;