<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> | Codoc</title>
    <link rel="stylesheet" href="<?php echo $stylesheet ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo $path ?>img/favicon.svg">
    <meta name="description" content="<?php echo $meta_description ?>">
</head>
<body>
    <header>
        <div class="hero show" id="hero">
            <svg width="259" height="75" viewBox="0 0 259 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.26667 74.9604V2.42704H23.7653V10.2777H16.3413V67.1097H23.7653V74.9604H4.26667ZM58.622 59.3444L58.238 59.8137C57.982 60.0982 57.5269 60.4679 56.8727 60.923C56.2469 61.3497 55.4789 61.7906 54.5687 62.2457C53.6869 62.6724 52.4922 63.0279 50.9847 63.3124C49.5056 63.6253 47.9127 63.7817 46.206 63.7817C40.4318 63.7817 36.0087 62.0893 32.9367 58.7044C29.8931 55.3195 28.3713 50.8395 28.3713 45.2644C28.3713 42.2493 28.8407 39.5044 29.7793 37.0297C30.718 34.555 31.998 32.507 33.6193 30.8857C35.2691 29.2359 37.1891 27.9702 39.3793 27.0884C41.598 26.1782 43.9873 25.723 46.5473 25.723C51.4967 25.723 55.3367 26.9035 58.0673 29.2644C58.6647 29.8617 58.9633 30.1604 58.9633 30.1604L58.3233 40.187L52.2647 40.2297L49.8327 33.7017C49.6051 33.6448 49.2922 33.6164 48.894 33.6164C46.3056 33.6164 44.5136 34.5124 43.518 36.3044C42.5509 38.0679 42.0673 41.1399 42.0673 45.5204C42.0673 47.4262 42.2238 49.0617 42.5367 50.427C42.8496 51.7639 43.2051 52.7737 43.6033 53.4564C44.0016 54.1106 44.5278 54.6226 45.182 54.9924C45.8647 55.3622 46.4193 55.5755 46.846 55.6324C47.2727 55.6893 47.7989 55.7177 48.4247 55.7177C49.8469 55.7177 51.2976 55.547 52.7767 55.2057C54.2842 54.8644 55.5216 54.3097 56.4887 53.5417L58.622 59.3444ZM80.355 58.6617C81.6066 58.6617 82.5594 58.1497 83.2137 57.1257C83.8963 56.0733 84.2377 54.6368 84.2377 52.8164V39.3337C84.2377 33.787 82.9292 31.0137 80.3123 31.0137C79.0892 31.0137 78.1363 31.5115 77.4537 32.507C76.771 33.5026 76.4297 34.9106 76.4297 36.731V50.5977C76.4297 55.9737 77.7381 58.6617 80.355 58.6617ZM80.0137 63.7817C73.4999 63.7817 68.7354 62.3026 65.7203 59.3444C62.7052 56.3862 61.1977 51.6644 61.1977 45.179C61.1977 38.7506 62.7194 33.915 65.763 30.6724C68.8066 27.4013 73.7559 25.7657 80.611 25.7657C87.2954 25.7657 92.1168 27.3302 95.075 30.459C98.0617 33.5595 99.555 38.267 99.555 44.5817C99.555 51.1239 97.9763 55.9595 94.819 59.0884C91.6901 62.2173 86.755 63.7817 80.0137 63.7817ZM128.054 62.8857L126.39 57.3817C126.162 57.7799 125.892 58.1782 125.579 58.5764C125.295 58.9746 124.825 59.4866 124.171 60.1124C123.517 60.7097 122.82 61.2359 122.08 61.691C121.341 62.1462 120.416 62.5444 119.307 62.8857C118.198 63.227 117.031 63.3977 115.808 63.3977C111.115 63.3977 107.673 61.7906 105.483 58.5764C103.293 55.3622 102.198 50.8964 102.198 45.179C102.198 41.595 102.71 38.4093 103.734 35.6217C104.758 32.8057 106.365 30.5444 108.555 28.8377C110.745 27.131 113.391 26.2777 116.491 26.2777C118.34 26.2777 119.99 26.4768 121.44 26.875C122.891 27.2733 124.143 27.7568 125.195 28.3257V15.3977L120.502 13.819V9.12571L135.606 6.99238H138.934V62.8857H128.054ZM122.038 55.035C122.55 55.035 123.076 54.9497 123.616 54.779C124.157 54.5799 124.683 54.3097 125.195 53.9684V32.507C124.313 32.3079 123.503 32.2084 122.763 32.2084C118.98 32.2368 117.074 35.1524 117.046 40.955V46.9284C117.046 49.6022 117.515 51.6217 118.454 52.987C119.392 54.3524 120.587 55.035 122.038 55.035ZM161.855 58.6617C163.107 58.6617 164.059 58.1497 164.714 57.1257C165.396 56.0733 165.738 54.6368 165.738 52.8164V39.3337C165.738 33.787 164.429 31.0137 161.812 31.0137C160.589 31.0137 159.636 31.5115 158.954 32.507C158.271 33.5026 157.93 34.9106 157.93 36.731V50.5977C157.93 55.9737 159.238 58.6617 161.855 58.6617ZM161.514 63.7817C155 63.7817 150.235 62.3026 147.22 59.3444C144.205 56.3862 142.698 51.6644 142.698 45.179C142.698 38.7506 144.219 33.915 147.263 30.6724C150.307 27.4013 155.256 25.7657 162.111 25.7657C168.795 25.7657 173.617 27.3302 176.575 30.459C179.562 33.5595 181.055 38.267 181.055 44.5817C181.055 51.1239 179.476 55.9595 176.319 59.0884C173.19 62.2173 168.255 63.7817 161.514 63.7817ZM214.247 59.3444L213.863 59.8137C213.607 60.0982 213.152 60.4679 212.498 60.923C211.872 61.3497 211.104 61.7906 210.194 62.2457C209.312 62.6724 208.117 63.0279 206.61 63.3124C205.131 63.6253 203.538 63.7817 201.831 63.7817C196.057 63.7817 191.634 62.0893 188.562 58.7044C185.518 55.3195 183.996 50.8395 183.996 45.2644C183.996 42.2493 184.466 39.5044 185.404 37.0297C186.343 34.555 187.623 32.507 189.244 30.8857C190.894 29.2359 192.814 27.9702 195.004 27.0884C197.223 26.1782 199.612 25.723 202.172 25.723C207.122 25.723 210.962 26.9035 213.692 29.2644C214.29 29.8617 214.588 30.1604 214.588 30.1604L213.948 40.187L207.89 40.2297L205.458 33.7017C205.23 33.6448 204.917 33.6164 204.519 33.6164C201.931 33.6164 200.139 34.5124 199.143 36.3044C198.176 38.0679 197.692 41.1399 197.692 45.5204C197.692 47.4262 197.849 49.0617 198.162 50.427C198.475 51.7639 198.83 52.7737 199.228 53.4564C199.627 54.1106 200.153 54.6226 200.807 54.9924C201.49 55.3622 202.044 55.5755 202.471 55.6324C202.898 55.6893 203.424 55.7177 204.05 55.7177C205.472 55.7177 206.923 55.547 208.402 55.2057C209.909 54.8644 211.147 54.3097 212.114 53.5417L214.247 59.3444ZM218.487 74.9604V67.1097H225.911V10.2777H218.487V2.42704H237.985V74.9604H218.487Z" fill="#14F7EB"/>
                <path d="M6.38092 73.0747V0.541332H25.8796V8.392H18.4556V65.224H25.8796V73.0747H6.38092ZM60.7363 57.4587L60.3523 57.928C60.0963 58.2124 59.6411 58.5822 58.9869 59.0373C58.3611 59.464 57.5931 59.9049 56.6829 60.36C55.8011 60.7867 54.6065 61.1422 53.0989 61.4267C51.6198 61.7396 50.0269 61.896 48.3203 61.896C42.546 61.896 38.1229 60.2036 35.0509 56.8187C32.0074 53.4338 30.4856 48.9538 30.4856 43.3787C30.4856 40.3636 30.9549 37.6187 31.8936 35.144C32.8323 32.6693 34.1123 30.6213 35.7336 29C37.3834 27.3502 39.3034 26.0844 41.4936 25.2027C43.7123 24.2924 46.1016 23.8373 48.6616 23.8373C53.6109 23.8373 57.4509 25.0178 60.1816 27.3787C60.7789 27.976 61.0776 28.2747 61.0776 28.2747L60.4376 38.3013L54.3789 38.344L51.9469 31.816C51.7194 31.7591 51.4065 31.7307 51.0083 31.7307C48.4198 31.7307 46.6278 32.6267 45.6323 34.4187C44.6651 36.1822 44.1816 39.2542 44.1816 43.6347C44.1816 45.5404 44.338 47.176 44.6509 48.5413C44.9638 49.8782 45.3194 50.888 45.7176 51.5707C46.1158 52.2249 46.642 52.7369 47.2963 53.1067C47.9789 53.4764 48.5336 53.6898 48.9603 53.7467C49.3869 53.8036 49.9131 53.832 50.5389 53.832C51.9611 53.832 53.4118 53.6613 54.8909 53.32C56.3985 52.9787 57.6358 52.424 58.6029 51.656L60.7363 57.4587ZM82.4693 56.776C83.7208 56.776 84.6737 56.264 85.3279 55.24C86.0106 54.1876 86.3519 52.7511 86.3519 50.9307V37.448C86.3519 31.9013 85.0435 29.128 82.4266 29.128C81.2035 29.128 80.2506 29.6258 79.5679 30.6213C78.8853 31.6169 78.5439 33.0249 78.5439 34.8453V48.712C78.5439 54.088 79.8524 56.776 82.4693 56.776ZM82.1279 61.896C75.6141 61.896 70.8497 60.4169 67.8346 57.4587C64.8195 54.5004 63.3119 49.7787 63.3119 43.2933C63.3119 36.8649 64.8337 32.0293 67.8773 28.7867C70.9208 25.5156 75.8701 23.88 82.7253 23.88C89.4097 23.88 94.231 25.4444 97.1893 28.5733C100.176 31.6738 101.669 36.3813 101.669 42.696C101.669 49.2382 100.091 54.0738 96.9333 57.2027C93.8044 60.3316 88.8693 61.896 82.1279 61.896ZM130.168 61L128.504 55.496C128.276 55.8942 128.006 56.2924 127.693 56.6907C127.409 57.0889 126.939 57.6009 126.285 58.2267C125.631 58.824 124.934 59.3502 124.195 59.8053C123.455 60.2604 122.531 60.6587 121.421 61C120.312 61.3413 119.146 61.512 117.923 61.512C113.229 61.512 109.787 59.9049 107.597 56.6907C105.407 53.4764 104.312 49.0107 104.312 43.2933C104.312 39.7093 104.824 36.5236 105.848 33.736C106.872 30.92 108.479 28.6587 110.669 26.952C112.859 25.2453 115.505 24.392 118.605 24.392C120.454 24.392 122.104 24.5911 123.555 24.9893C125.005 25.3876 126.257 25.8711 127.309 26.44V13.512L122.616 11.9333V7.24L137.72 5.10667H141.048V61H130.168ZM124.152 53.1493C124.664 53.1493 125.19 53.064 125.731 52.8933C126.271 52.6942 126.797 52.424 127.309 52.0827V30.6213C126.427 30.4222 125.617 30.3227 124.877 30.3227C121.094 30.3511 119.188 33.2667 119.16 39.0693V45.0427C119.16 47.7164 119.629 49.736 120.568 51.1013C121.507 52.4667 122.701 53.1493 124.152 53.1493ZM163.969 56.776C165.221 56.776 166.174 56.264 166.828 55.24C167.511 54.1876 167.852 52.7511 167.852 50.9307V37.448C167.852 31.9013 166.543 29.128 163.927 29.128C162.703 29.128 161.751 29.6258 161.068 30.6213C160.385 31.6169 160.044 33.0249 160.044 34.8453V48.712C160.044 54.088 161.352 56.776 163.969 56.776ZM163.628 61.896C157.114 61.896 152.35 60.4169 149.335 57.4587C146.319 54.5004 144.812 49.7787 144.812 43.2933C144.812 36.8649 146.334 32.0293 149.377 28.7867C152.421 25.5156 157.37 23.88 164.225 23.88C170.91 23.88 175.731 25.4444 178.689 28.5733C181.676 31.6738 183.169 36.3813 183.169 42.696C183.169 49.2382 181.591 54.0738 178.433 57.2027C175.304 60.3316 170.369 61.896 163.628 61.896ZM216.361 57.4587L215.977 57.928C215.721 58.2124 215.266 58.5822 214.612 59.0373C213.986 59.464 213.218 59.9049 212.308 60.36C211.426 60.7867 210.231 61.1422 208.724 61.4267C207.245 61.7396 205.652 61.896 203.945 61.896C198.171 61.896 193.748 60.2036 190.676 56.8187C187.632 53.4338 186.111 48.9538 186.111 43.3787C186.111 40.3636 186.58 37.6187 187.519 35.144C188.457 32.6693 189.737 30.6213 191.359 29C193.008 27.3502 194.928 26.0844 197.119 25.2027C199.337 24.2924 201.727 23.8373 204.287 23.8373C209.236 23.8373 213.076 25.0178 215.807 27.3787C216.404 27.976 216.703 28.2747 216.703 28.2747L216.063 38.3013L210.004 38.344L207.572 31.816C207.344 31.7591 207.031 31.7307 206.633 31.7307C204.045 31.7307 202.253 32.6267 201.257 34.4187C200.29 36.1822 199.807 39.2542 199.807 43.6347C199.807 45.5404 199.963 47.176 200.276 48.5413C200.589 49.8782 200.944 50.888 201.343 51.5707C201.741 52.2249 202.267 52.7369 202.921 53.1067C203.604 53.4764 204.159 53.6898 204.585 53.7467C205.012 53.8036 205.538 53.832 206.164 53.832C207.586 53.832 209.037 53.6613 210.516 53.32C212.023 52.9787 213.261 52.424 214.228 51.656L216.361 57.4587ZM220.601 73.0747V65.224H228.025V8.392H220.601V0.541332H240.1V73.0747H220.601Z" fill="#F809B0"/>
                <path class="logoCodoc" d="M5.3238 74.0175V1.4842H24.8225V9.33487H17.3985V66.1669H24.8225V74.0175H5.3238ZM59.6791 58.4015L59.2951 58.8709C59.0391 59.1553 58.584 59.5251 57.9298 59.9802C57.304 60.4069 56.536 60.8478 55.6258 61.3029C54.744 61.7295 53.5494 62.0851 52.0418 62.3695C50.5627 62.6824 48.9698 62.8389 47.2631 62.8389C41.4889 62.8389 37.0658 61.1464 33.9938 57.7615C30.9502 54.3766 29.4285 49.8966 29.4285 44.3215C29.4285 41.3064 29.8978 38.5615 30.8365 36.0869C31.7751 33.6122 33.0551 31.5642 34.6765 29.9429C36.3262 28.2931 38.2462 27.0273 40.4365 26.1455C42.6551 25.2353 45.0445 24.7802 47.6045 24.7802C52.5538 24.7802 56.3938 25.9606 59.1245 28.3215C59.7218 28.9189 60.0205 29.2175 60.0205 29.2175L59.3805 39.2442L53.3218 39.2869L50.8898 32.7589C50.6622 32.702 50.3494 32.6735 49.9511 32.6735C47.3627 32.6735 45.5707 33.5695 44.5751 35.3615C43.608 37.1251 43.1245 40.1971 43.1245 44.5775C43.1245 46.4833 43.2809 48.1189 43.5938 49.4842C43.9067 50.8211 44.2622 51.8309 44.6605 52.5135C45.0587 53.1678 45.5849 53.6798 46.2391 54.0495C46.9218 54.4193 47.4765 54.6326 47.9031 54.6895C48.3298 54.7464 48.856 54.7749 49.4818 54.7749C50.904 54.7749 52.3547 54.6042 53.8338 54.2629C55.3414 53.9215 56.5787 53.3669 57.5458 52.5989L59.6791 58.4015ZM81.4121 57.7189C82.6637 57.7189 83.6166 57.2069 84.2708 56.1829C84.9535 55.1304 85.2948 53.694 85.2948 51.8735V38.3909C85.2948 32.8442 83.9864 30.0709 81.3695 30.0709C80.1464 30.0709 79.1935 30.5686 78.5108 31.5642C77.8281 32.5598 77.4868 33.9678 77.4868 35.7882V49.6549C77.4868 55.0309 78.7952 57.7189 81.4121 57.7189ZM81.0708 62.8389C74.557 62.8389 69.7926 61.3598 66.7775 58.4015C63.7624 55.4433 62.2548 50.7215 62.2548 44.2362C62.2548 37.8078 63.7766 32.9722 66.8201 29.7295C69.8637 26.4584 74.813 24.8229 81.6681 24.8229C88.3526 24.8229 93.1739 26.3873 96.1321 29.5162C99.1188 32.6166 100.612 37.3242 100.612 43.6389C100.612 50.1811 99.0335 55.0166 95.8761 58.1455C92.7472 61.2744 87.8121 62.8389 81.0708 62.8389ZM129.111 61.9429L127.447 56.4389C127.219 56.8371 126.949 57.2353 126.636 57.6335C126.352 58.0318 125.882 58.5438 125.228 59.1695C124.574 59.7669 123.877 60.2931 123.137 60.7482C122.398 61.2033 121.473 61.6015 120.364 61.9429C119.255 62.2842 118.089 62.4549 116.865 62.4549C112.172 62.4549 108.73 60.8478 106.54 57.6335C104.35 54.4193 103.255 49.9535 103.255 44.2362C103.255 40.6522 103.767 37.4664 104.791 34.6789C105.815 31.8629 107.422 29.6015 109.612 27.8949C111.802 26.1882 114.448 25.3349 117.548 25.3349C119.397 25.3349 121.047 25.534 122.497 25.9322C123.948 26.3304 125.2 26.814 126.252 27.3829V14.4549L121.559 12.8762V8.18287L136.663 6.04954H139.991V61.9429H129.111ZM123.095 54.0922C123.607 54.0922 124.133 54.0069 124.673 53.8362C125.214 53.6371 125.74 53.3669 126.252 53.0255V31.5642C125.37 31.3651 124.56 31.2655 123.82 31.2655C120.037 31.294 118.131 34.2095 118.103 40.0122V45.9855C118.103 48.6593 118.572 50.6789 119.511 52.0442C120.449 53.4095 121.644 54.0922 123.095 54.0922ZM162.912 57.7189C164.164 57.7189 165.117 57.2069 165.771 56.1829C166.453 55.1304 166.795 53.694 166.795 51.8735V38.3909C166.795 32.8442 165.486 30.0709 162.869 30.0709C161.646 30.0709 160.693 30.5686 160.011 31.5642C159.328 32.5598 158.987 33.9678 158.987 35.7882V49.6549C158.987 55.0309 160.295 57.7189 162.912 57.7189ZM162.571 62.8389C156.057 62.8389 151.293 61.3598 148.277 58.4015C145.262 55.4433 143.755 50.7215 143.755 44.2362C143.755 37.8078 145.277 32.9722 148.32 29.7295C151.364 26.4584 156.313 24.8229 163.168 24.8229C169.853 24.8229 174.674 26.3873 177.632 29.5162C180.619 32.6166 182.112 37.3242 182.112 43.6389C182.112 50.1811 180.533 55.0166 177.376 58.1455C174.247 61.2744 169.312 62.8389 162.571 62.8389ZM215.304 58.4015L214.92 58.8709C214.664 59.1553 214.209 59.5251 213.555 59.9802C212.929 60.4069 212.161 60.8478 211.251 61.3029C210.369 61.7295 209.174 62.0851 207.667 62.3695C206.188 62.6824 204.595 62.8389 202.888 62.8389C197.114 62.8389 192.691 61.1464 189.619 57.7615C186.575 54.3766 185.053 49.8966 185.053 44.3215C185.053 41.3064 185.523 38.5615 186.461 36.0869C187.4 33.6122 188.68 31.5642 190.301 29.9429C191.951 28.2931 193.871 27.0273 196.061 26.1455C198.28 25.2353 200.669 24.7802 203.229 24.7802C208.179 24.7802 212.019 25.9606 214.749 28.3215C215.347 28.9189 215.645 29.2175 215.645 29.2175L215.005 39.2442L208.947 39.2869L206.515 32.7589C206.287 32.702 205.974 32.6735 205.576 32.6735C202.988 32.6735 201.196 33.5695 200.2 35.3615C199.233 37.1251 198.749 40.1971 198.749 44.5775C198.749 46.4833 198.906 48.1189 199.219 49.4842C199.532 50.8211 199.887 51.8309 200.285 52.5135C200.684 53.1678 201.21 53.6798 201.864 54.0495C202.547 54.4193 203.101 54.6326 203.528 54.6895C203.955 54.7464 204.481 54.7749 205.107 54.7749C206.529 54.7749 207.98 54.6042 209.459 54.2629C210.966 53.9215 212.204 53.3669 213.171 52.5989L215.304 58.4015ZM219.544 74.0175V66.1669H226.968V9.33487H219.544V1.4842H239.042V74.0175H219.544Z" fill="black"/>
            </svg>
        </div>

        <nav id="sidebar"  class="hidden">
                <svg width="79" height="74" viewBox="0 0 79 74" fill="none" xmlns="http://www.w3.org/2000/svg" class="header-logo">
                    <path class="logoCodoc" d="M0.266666 73.1461V0.612759H19.7653V8.46343H12.3413V65.2954H19.7653V73.1461H0.266666ZM54.622 57.5301L54.238 57.9994C53.982 58.2839 53.5269 58.6536 52.8727 59.1088C52.2469 59.5354 51.4789 59.9763 50.5687 60.4314C49.6869 60.8581 48.4922 61.2136 46.9847 61.4981C45.5056 61.811 43.9127 61.9674 42.206 61.9674C36.4318 61.9674 32.0087 60.275 28.9367 56.8901C25.8931 53.5052 24.3713 49.0252 24.3713 43.4501C24.3713 40.435 24.8407 37.6901 25.7793 35.2154C26.718 32.7408 27.998 30.6928 29.6193 29.0714C31.2691 27.4216 33.1891 26.1559 35.3793 25.2741C37.598 24.3639 39.9873 23.9088 42.5473 23.9088C47.4967 23.9088 51.3367 25.0892 54.0673 27.4501C54.6647 28.0474 54.9633 28.3461 54.9633 28.3461L54.3233 38.3728L48.2647 38.4154L45.8327 31.8874C45.6051 31.8305 45.2922 31.8021 44.894 31.8021C42.3056 31.8021 40.5136 32.6981 39.518 34.4901C38.5509 36.2536 38.0673 39.3256 38.0673 43.7061C38.0673 45.6119 38.2238 47.2474 38.5367 48.6128C38.8496 49.9496 39.2051 50.9594 39.6033 51.6421C40.0016 52.2963 40.5278 52.8083 41.182 53.1781C41.8647 53.5479 42.4193 53.7612 42.846 53.8181C43.2727 53.875 43.7989 53.9034 44.4247 53.9034C45.8469 53.9034 47.2976 53.7328 48.7767 53.3914C50.2842 53.0501 51.5216 52.4954 52.4887 51.7274L54.622 57.5301ZM58.8617 73.1461V65.2954H66.2857V8.46343H58.8617V0.612759H78.3603V73.1461H58.8617Z"/>
                </svg>
                <ul>
                    <li>
                        <div id="toggle-container">
                            <div id="modeToggle">
                                <img alt="" id="modeIcon">
                            </div>
                        </div>
                    </li>
                    <li>

                        <a href="/codoc/"><img class="icons" src="<?php echo $path ?>img/maison.svg" alt="">Accueil</a>
                    </li>
                    <?php if ($_SESSION): ?>
                    <li>
                        <a href="<?php echo $router->generate('logout'); ?>" >
                            <img class="icons" src="<?php echo $path ?>img/sortir.svg" alt="">logout
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $router->generate('createpost') ?>" >
                            <img class="icons" src="<?php echo $path ?>img/editer.svg" alt="">Create codoc
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img class="icons" src="<?php echo $path ?>img/reglages.svg" alt="">Settings
                        </a>
                    </li>
                    <?php else: ?>
                    <li>
                        <a href="<?php echo $router->generate('login'); ?>">
                            <img class="icons" src="<?php echo $path ?>img/utilisateur.svg" alt="">login
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $router->generate('login') ?>">
                            <img class="icons" src="<?php echo $path ?>img/ajout-dutilisateur.svg" alt="">Register
                        </a>
                        </li>
                    <li>
                        <a href="">
                            <img class="icons" src="<?php echo $path ?>img/reglages.svg" alt="">Settings
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                <button id="closeSidebar">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" stroke="#344054" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </nav>
            <button id="openSidebar">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12H21M3 6H21M3 18H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </button>
    </header>
