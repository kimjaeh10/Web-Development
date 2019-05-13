# CSS Grid Layout

The CSS Grid Layout Module offers a grid-based layout system, with rows and columns,
making it easier to design web pages without having to use floats and positioning.

### Note
1. grid-template-columns:70% 30%;
2. grid-template-columns:1fr 1fr 1fr
3. grid-template-columns:repeat(3, 1fr)

The second and third ones are usually better way to divide columns than the first one.

        .box1{
            grid-column:1/3;
            grid-row:1/3;
        }

        .box2{
            grid-column:3;
            grid-row:1/3;
        }

        .box3{
            grid-column:2/4;
            grid-row:3;
        }

        .box4{
            grid-column:1;
            grid-row:2/4;
            border:1px solid #333;
        }

The CSS code above create a layout like the below. The cool thing about grid is they can overlap each other.

![image](https://user-images.githubusercontent.com/48369187/57653411-bd701580-759f-11e9-9f06-af3aae5686e3.png)
