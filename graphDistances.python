
def solution(graph, start):
    n = len(graph)
    dist = [float('inf')] * n
    dist[start] = 0
    visited = set()

    while len(visited) < n:
        u = min((v for v in range(n) if v not in visited), key=lambda v: dist[v])
        visited.add(u)
        for v in range(n):
            if graph[u][v] != -1:
                dist[v] = min(dist[v], dist[u] + graph[u][v])

    return dist
